<?php
/**
 * Trupti Shah Emcee Theme Functions
 *
 * @package Trupti_Emcee
 */

if (!defined('ABSPATH')) {
    exit;
}

// Include Icons Helper
require_once get_template_directory() . '/inc/icons.php';

/**
 * Theme Setup
 */
function trupti_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'trupti_theme_setup');

/**
 * Enqueue Frontend Assets
 */
function trupti_enqueue_scripts() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $assets_dir = $theme_dir . '/dist/assets';

    // Enqueue Compiled Tailwind CSS Bundle
    if (is_dir($assets_dir)) {
        $files = scandir($assets_dir);
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'css' && strpos($file, 'index-') === 0) {
                wp_enqueue_style(
                    'trupti-main-styles',
                    $theme_uri . '/dist/assets/' . $file,
                    array(),
                    filemtime($assets_dir . '/' . $file)
                );
                break;
            }
        }
    }

    // Enqueue Theme Style.css
    wp_enqueue_style('trupti-theme-style', get_stylesheet_uri(), array('trupti-main-styles'), '1.2.1');
}
add_action('wp_enqueue_scripts', 'trupti_enqueue_scripts');

/**
 * Customize Front Page Title to prevent "Home - Trupti Shah"
 */
function trupti_custom_document_title_parts($title_parts) {
    if (is_front_page()) {
        $title_parts['title']   = 'Trupti Shah';
        $title_parts['tagline'] = 'Professional Emcee & Anchor in Mumbai';
    }
    return $title_parts;
}
add_filter('document_title_parts', 'trupti_custom_document_title_parts', 20);


/**
 * Register Site Settings in WP Admin
 */
function trupti_register_custom_settings() {
    $settings = array('trupti_phone', 'trupti_whatsapp', 'trupti_email', 'trupti_address', 'trupti_facebook', 'trupti_instagram', 'trupti_youtube');
    foreach ($settings as $setting) {
        register_setting('trupti_settings_group', $setting);
    }
}
add_action('admin_init', 'trupti_register_custom_settings');

function trupti_add_settings_menu() {
    add_menu_page(
        'Site Settings',
        'Site Settings',
        'manage_options',
        'trupti-site-settings',
        'trupti_render_settings_page',
        'dashicons-admin-generic',
        25
    );
}
add_action('admin_menu', 'trupti_add_settings_menu');

function trupti_render_settings_page() {
    ?>
    <div class="wrap" style="max-width: 800px;">
        <h1>Website Contact &amp; Social Settings</h1>
        <p>Edit global contact numbers, email, and social links that appear in the header and footer.</p>
        <form method="post" action="options.php" style="background: #fff; padding: 24px; border-radius: 8px; border: 1px solid #ccd0d4;">
            <?php settings_fields('trupti_settings_group'); ?>
            <?php do_settings_sections('trupti_settings_group'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="trupti_phone">Phone Number</label></th>
                    <td><input type="text" id="trupti_phone" name="trupti_phone" value="<?php echo esc_attr(get_option('trupti_phone', '+91 9820359087')); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_whatsapp">WhatsApp Number (e.g. 919820359087)</label></th>
                    <td><input type="text" id="trupti_whatsapp" name="trupti_whatsapp" value="<?php echo esc_attr(get_option('trupti_whatsapp', '919820359087')); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_email">Contact &amp; Form Email</label></th>
                    <td><input type="email" id="trupti_email" name="trupti_email" value="<?php echo esc_attr(get_option('trupti_email', 'trupti@truptiemcee.com')); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_address">Office Address</label></th>
                    <td><textarea id="trupti_address" name="trupti_address" rows="3" class="large-text"><?php echo esc_textarea(get_option('trupti_address', "Studio 10, 10th Floor, Navjivan Commercial Bldg No 3, Grant Road (E), Mumbai, India")); ?></textarea></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_facebook">Facebook URL</label></th>
                    <td><input type="url" id="trupti_facebook" name="trupti_facebook" value="<?php echo esc_attr(get_option('trupti_facebook', 'https://www.facebook.com/WeddingSangeetChoreographer/')); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_instagram">Instagram URL</label></th>
                    <td><input type="url" id="trupti_instagram" name="trupti_instagram" value="<?php echo esc_attr(get_option('trupti_instagram', 'https://www.instagram.com/truptieventplanner/')); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="trupti_youtube">YouTube URL</label></th>
                    <td><input type="url" id="trupti_youtube" name="trupti_youtube" value="<?php echo esc_attr(get_option('trupti_youtube', 'https://www.youtube.com/user/mistyraj/videos')); ?>" class="regular-text" /></td>
                </tr>
            </table>
            <?php submit_button('Save Settings'); ?>
        </form>
    </div>
    <?php
}

/**
 * Register Contact Form REST API Endpoint
 * POST /wp-json/trupti/v1/contact
 */
function trupti_register_contact_rest_route() {
    register_rest_route('trupti/v1', '/contact', array(
        'methods'             => 'POST',
        'callback'            => 'trupti_handle_contact_form',
        'permission_callback' => '__return_true',
    ));
}
add_action('rest_api_init', 'trupti_register_contact_rest_route');

/**
 * Handle Contact Form Submission
 */
function trupti_handle_contact_form(WP_REST_Request $request) {
    $params = $request->get_json_params();
    if (empty($params)) {
        $params = $request->get_body_params();
    }

    $name           = sanitize_text_field($params['name'] ?? '');
    $phone          = sanitize_text_field($params['phone'] ?? '');
    $email          = sanitize_email($params['email'] ?? '');
    $event_type     = sanitize_text_field($params['eventType'] ?? 'General Enquiry');
    $event_date     = sanitize_text_field($params['eventDate'] ?? 'Not specified');
    $event_location = sanitize_text_field($params['eventLocation'] ?? 'Not specified');
    $details        = sanitize_textarea_field($params['details'] ?? '');

    if (empty($name) || empty($phone)) {
        return new WP_REST_Response(array(
            'success' => false,
            'message' => 'Please provide at least a name and phone number.',
        ), 400);
    }

    $recipient = get_option('trupti_email', 'trupti@truptiemcee.com');
    $subject   = 'New Event Enquiry: ' . $event_type . ' - ' . $name;

    $message  = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #fed7aa; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">';
    $message .= '<div style="background: linear-gradient(135deg, #be185d, #e11d48); padding: 24px; color: #ffffff; text-align: center;">';
    $message .= '<h2 style="margin: 0; font-size: 22px;">New Event Booking Enquiry</h2>';
    $message .= '<p style="margin: 6px 0 0 0; font-size: 14px; opacity: 0.9;">Website Lead for Trupti Shah</p>';
    $message .= '</div>';
    $message .= '<div style="padding: 24px; background: #ffffff;">';
    $message .= '<table style="width: 100%; border-collapse: collapse;">';
    $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; width: 140px; color: #475569;">Name:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0f172a;">' . esc_html($name) . '</td></tr>';
    $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; color: #475569;">Phone:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0f172a;"><a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></td></tr>';
    if ($email) {
        $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; color: #475569;">Email:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0f172a;"><a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></td></tr>';
    }
    $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; color: #475569;">Event Type:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #be185d; font-weight: bold;">' . esc_html($event_type) . '</td></tr>';
    $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; color: #475569;">Event Date:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0f172a;">' . esc_html($event_date) . '</td></tr>';
    $message .= '<tr><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-weight: bold; color: #475569;">Event Location:</td><td style="padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0f172a;">' . esc_html($event_location) . '</td></tr>';
    $message .= '<tr><td style="padding: 10px 0; font-weight: bold; color: #475569; vertical-align: top;">Event Details:</td><td style="padding: 10px 0; color: #0f172a; line-height: 1.6;">' . nl2br(esc_html($details)) . '</td></tr>';
    $message .= '</table>';
    $message .= '</div>';
    $message .= '<div style="background: #f8fafc; padding: 14px 24px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #f1f5f9;">';
    $message .= 'Received on ' . current_time('F j, Y, g:i a') . ' from truptiemcee.com';
    $message .= '</div>';
    $message .= '</div>';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Trupti Shah Website <' . $recipient . '>',
    );
    if ($email) {
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
    }

    $sent = wp_mail($recipient, $subject, $message, $headers);

    return new WP_REST_Response(array(
        'success'   => true,
        'mail_sent' => $sent,
        'message'   => 'Thank you! Your enquiry has been sent to ' . $recipient . '.',
    ), 200);
}
