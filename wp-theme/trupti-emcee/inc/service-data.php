<?php
/**
 * Service Pages Data Repository
 *
 * @package Trupti_Emcee
 */

if (!defined('ABSPATH')) {
    exit;
}

function trupti_get_service_config($slug) {
    $theme_uri = get_template_directory_uri();

    $services = array(
        'corporate-event-emcee' => array(
            'badge' => 'Corporate Emcee',
            'title_prefix' => 'Lead The Room.',
            'title_gradient' => 'Own The Moment.',
            'description' => 'Bring professionalism, energy and personality to your corporate event with a confident emcee who knows how to connect with every audience.',
            'subtext' => 'From opening remarks and speaker introductions to audience engagement and closing moments, Trupti Shah ensures your event flows naturally and leaves a lasting impression.',
            'image' => $theme_uri . '/assets/truptiemcee.jpeg',
            'highlights' => array(
                array('title' => 'Corporate Events', 'text' => 'Professional hosting for conferences, corporate gatherings, annual meets and business events.', 'icon' => 'building-2'),
                array('title' => 'Audience Engagement', 'text' => 'Keep your audience attentive, involved and energized throughout every segment.', 'icon' => 'users'),
                array('title' => 'Smooth Event Flow', 'text' => 'Seamless transitions between speakers, performances, presentations and important announcements.', 'icon' => 'sparkles'),
            ),
            'eventTypes' => array('Corporate Conferences', 'Annual General Meetings', 'Product Launches', 'Award Ceremonies', 'Dealer & Partner Meets', 'Corporate Celebrations'),
            'approach' => array(
                array('title' => 'Set The Tone', 'text' => 'Open the event with confidence and set an engaging atmosphere right from the start.', 'icon' => 'mic2'),
                array('title' => 'Guide The Flow', 'text' => 'Ensure presentations, announcements and schedule timings move forward effortlessly.', 'icon' => 'sparkles'),
                array('title' => 'Connect The Room', 'text' => 'Maintain energy and audience connection from opening remarks to concluding moments.', 'icon' => 'users'),
            ),
        ),

        'sangeet-anchor-mumbai' => array(
            'badge' => 'Sangeet Anchor Mumbai',
            'title_prefix' => 'High Energy Beats.',
            'title_gradient' => 'Unforgettable Sangeet Nights.',
            'description' => 'Ignite your celebration with Mumbai’s favorite Sangeet anchor who brings rhythm, interactive games, and boundless excitement to your wedding dance night.',
            'subtext' => 'From coordinating bride and groom family performances to getting reluctant uncles and aunts onto the dance floor, Trupti guarantees a celebration full of laughter and joy.',
            'image' => $theme_uri . '/assets/sangeet.webp',
            'highlights' => array(
                array('title' => 'Family Performance Flow', 'text' => 'Seamless intros for family choreographies that keep the energy crescendoing.', 'icon' => 'music2'),
                array('title' => 'Crowd Games & Interaction', 'text' => 'Exciting couple trivia, dance-offs and icebreakers that bring both families together.', 'icon' => 'sparkles'),
                array('title' => 'DJ & Timing Sync', 'text' => 'Flawless coordination with sound engineers, DJs and light technicians.', 'icon' => 'mic2'),
            ),
            'eventTypes' => array('Bollywood Sangeet Nights', 'Cocktail & Dance Celebrations', 'Family Dance Competitions', 'Bride vs Groom Face-offs', 'Theme Musical Evenings'),
            'approach' => array(
                array('title' => 'Build The Hype', 'text' => 'Warm up the room and build electric anticipation for family performances.', 'icon' => 'music2'),
                array('title' => 'Celebrate Families', 'text' => 'Make every performance special with personalized, humorous and loving intros.', 'icon' => 'heart'),
                array('title' => 'Open The Dance Floor', 'text' => 'Transition smoothly into the after-party with total crowd participation.', 'icon' => 'party-popper'),
            ),
        ),

        'haldi-mehendi-anchoring-mumbai' => array(
            'badge' => 'Haldi & Mehendi Host',
            'title_prefix' => 'Color, Laughter &',
            'title_gradient' => 'Joyful Traditions.',
            'description' => 'Transform your daytime pre-wedding ceremonies into vibrant, laughter-packed memories with spirited, culturally resonant anchoring.',
            'subtext' => 'Haldi and Mehendi functions should feel joyous, intimate, and full of lively banter. Trupti Shah brings the warmth and charisma needed to make every guest smile.',
            'image' => $theme_uri . '/assets/haldi.webp',
            'highlights' => array(
                array('title' => 'Traditional Warmth', 'text' => 'Honoring family customs with respect, grace and genuine affection.', 'icon' => 'heart'),
                array('title' => 'Interactive Antakshari', 'text' => 'Nostalgic sing-alongs, dhol beats, and spontaneous celebratory moments.', 'icon' => 'music2'),
                array('title' => 'Vibrant Atmosphere', 'text' => 'Infusing color and lively banter into morning and afternoon celebrations.', 'icon' => 'sparkles'),
            ),
            'eventTypes' => array('Haldi Rasam', 'Mehendi Ki Raat', 'Phoolon Ki Holi', 'Dholki Gatherings', 'Ladies Sangeet'),
            'approach' => array(
                array('title' => 'Welcoming The Clan', 'text' => 'Setting a cozy, loving mood where everyone feels like part of one big family.', 'icon' => 'heart'),
                array('title' => 'Spontaneous Antics', 'text' => 'Encouraging funny rituals, teasing the couple, and capturing spontaneous joy.', 'icon' => 'sparkles'),
                array('title' => 'Musical Climax', 'text' => 'Leading the celebratory dholki dance and group photo moments.', 'icon' => 'party-popper'),
            ),
        ),

        'mameru-ceremony-hosting' => array(
            'badge' => 'Mameru Ceremony Host',
            'title_prefix' => 'Cherished Heritage.',
            'title_gradient' => 'Heartfelt Moments.',
            'description' => 'Thoughtful, respectful, and joyful hosting for Gujarati Mameru and Mosalu ceremonies celebrating maternal family blessings.',
            'subtext' => 'Preserving rich Gujarati wedding customs while keeping the event lively, engaging, and deeply memorable for all elders and youngsters present.',
            'image' => $theme_uri . '/assets/mameru.webp',
            'highlights' => array(
                array('title' => 'Cultural Authenticity', 'text' => 'Deep understanding of rituals, traditions, and auspicious blessings.', 'icon' => 'heart'),
                array('title' => 'Maternal Family Honor', 'text' => 'Special storytelling highlighting the bond between the mama and the bride.', 'icon' => 'sparkles'),
                array('title' => 'Joyous Celebration', 'text' => 'Balancing sacred customs with joyful music, garba, and entertainment.', 'icon' => 'music2'),
            ),
            'eventTypes' => array('Traditional Mameru', 'Mosalu Ceremony', 'Pre-Wedding Gujarati Rituals', 'Family Blessing Ceremonies'),
            'approach' => array(
                array('title' => 'Ritual Guidance', 'text' => 'Explaining the significance of each offering and tradition with elegance.', 'icon' => 'heart'),
                array('title' => 'Emotional Connection', 'text' => 'Crafting heartfelt words that touch the hearts of family elders.', 'icon' => 'sparkles'),
                array('title' => 'Garba Celebration', 'text' => 'Ending with traditional garba and celebratory joy for the entire family.', 'icon' => 'party-popper'),
            ),
        ),

        'birthday-party-hostess' => array(
            'badge' => 'Birthday Party Hostess',
            'title_prefix' => 'Celebrate Every Year.',
            'title_gradient' => 'Make It Legendary.',
            'description' => 'From 1st birthday milestone celebrations to grand 50th and 75th jubilees, energetic hosting that keeps every guest laughing and engaged.',
            'subtext' => 'Trupti crafts customized games, interactive trivia, and cake-cutting rituals that ensure the guest of honor feels like a true star.',
            'image' => $theme_uri . '/assets/birthdayparty.webp',
            'highlights' => array(
                array('title' => 'All-Age Entertainment', 'text' => 'Engaging kids, teens, adults, and seniors with tailored humor.', 'icon' => 'users'),
                array('title' => 'Custom Party Games', 'text' => 'Unique birthday games, roast & toast moments, and trivia.', 'icon' => 'party-popper'),
                array('title' => 'Grand Celebrations', 'text' => 'Creating an unforgettable countdown and cake-cutting ceremony.', 'icon' => 'sparkles'),
            ),
            'eventTypes' => array('1st Birthday Milestones', 'Sweet 16 & 18th Birthdays', '21st Celebrations', '50th & 60th Jubilees', 'Surprise Birthday Bashes'),
            'approach' => array(
                array('title' => 'Warm Welcome', 'text' => 'Welcoming guests with high energy and setting a festive tone.', 'icon' => 'party-popper'),
                array('title' => 'Lively Games', 'text' => 'Conducting entertaining party games with prizes and audience laughs.', 'icon' => 'sparkles'),
                array('title' => 'The Big Moment', 'text' => 'Spotlighting the birthday star for a memorable cake-cutting and speech.', 'icon' => 'heart'),
            ),
        ),

        'anniversary-party-emcee' => array(
            'badge' => 'Anniversary Party Emcee',
            'title_prefix' => 'Honoring Love &',
            'title_gradient' => 'A Lifetime of Memories.',
            'description' => 'Warm, nostalgic, and entertaining hosting celebrating Silver, Golden, and milestone anniversaries of devoted couples.',
            'subtext' => 'Revisit love stories, relive timeless moments, and bring children, grandchildren, and friends together for an unforgettable anniversary evening.',
            'image' => $theme_uri . '/assets/anniversary.webp',
            'highlights' => array(
                array('title' => 'Love Story Narrative', 'text' => 'Artfully narrating the couple’s journey with humor and warmth.', 'icon' => 'heart'),
                array('title' => 'Vow Renewal Moments', 'text' => 'Facilitating graceful ring exchange and vow renewal ceremonies.', 'icon' => 'sparkles'),
                array('title' => 'Family Tributes', 'text' => 'Orchestrating speeches, toasts, and video surprise showcases.', 'icon' => 'users'),
            ),
            'eventTypes' => array('25th Silver Jubilee', '50th Golden Jubilee', 'Milestone Decade Anniversaries', 'Vow Renewals', 'Intimate Family Dinners'),
            'approach' => array(
                array('title' => 'Nostalgic Opening', 'text' => 'Reminiscing about the beginnings of the couple’s beautiful journey.', 'icon' => 'heart'),
                array('title' => 'Family Interactions', 'text' => 'Inviting children and close friends to share humorous memories and tributes.', 'icon' => 'users'),
                array('title' => 'First Dance & Toast', 'text' => 'Highlighting the romantic anniversary dance and champagne toast.', 'icon' => 'sparkles'),
            ),
        ),

        'awards-gala-hostess' => array(
            'badge' => 'Awards Gala Hostess',
            'title_prefix' => 'Sophistication & Glitz.',
            'title_gradient' => 'Celebrating Excellence.',
            'description' => 'Commanding stage elegance, precise teleprompter delivery, and red-carpet glamor for prestigious industry awards and galas.',
            'subtext' => 'A great awards show requires punctuality, suspense, and dignified congratulations. Trupti delivers polished stage presentation that honors every winner.',
            'image' => $theme_uri . '/assets/truptiemcee.jpeg',
            'highlights' => array(
                array('title' => 'Pristine Stage Poise', 'text' => 'Executive level speech cadence and professional broadcast presence.', 'icon' => 'trophy'),
                array('title' => 'Time Management', 'text' => 'Strict adherence to event run-downs, sponsor credits and VIP cues.', 'icon' => 'check-circle'),
                array('title' => 'Winner Accolades', 'text' => 'Building suspense and celebrating achievers with genuine enthusiasm.', 'icon' => 'sparkles'),
            ),
            'eventTypes' => array('Industry Excellence Awards', 'Corporate Annual Honors', 'Leadership Galas', 'Red Carpet Evenings', 'Charity Fundraisers'),
            'approach' => array(
                array('title' => 'Setting The Standard', 'text' => 'Opening the night with prestige, welcoming dignitaries and guests of honor.', 'icon' => 'trophy'),
                array('title' => 'Smooth Trophy Handover', 'text' => 'Managing multi-category presentations and sponsor photo-ops seamlessly.', 'icon' => 'check-circle'),
                array('title' => 'Inspiring Finale', 'text' => 'Concluding the awards with inspiring remarks and leading into dinner.', 'icon' => 'sparkles'),
            ),
        ),

        'product-launch-emcee' => array(
            'badge' => 'Product Launch Emcee',
            'title_prefix' => 'Unveil Innovation.',
            'title_gradient' => 'Captivate The Market.',
            'description' => 'High-impact product unveilings, press launches, and brand showcases that turn attendees into loyal brand advocates.',
            'subtext' => 'Your launch deserves excitement, brand alignment, and dynamic audience retention. Trupti Shah brings energy that leaves an indelible impression on the media and clients.',
            'image' => $theme_uri . '/assets/officiallunch.jpeg',
            'highlights' => array(
                array('title' => 'Brand Storytelling', 'text' => 'Highlighting product USPs and core brand messaging with precision.', 'icon' => 'sparkles'),
                array('title' => 'Dramatic Reveal Flow', 'text' => 'Synchronizing audio-visuals, countdowns, and keynote unveilings.', 'icon' => 'party-popper'),
                array('title' => 'Media & Dealer Rapport', 'text' => 'Engaging journalists, partners, and corporate leadership.', 'icon' => 'users'),
            ),
            'eventTypes' => array('Automobile & Tech Launches', 'Retail Brand Openings', 'Real Estate Project Unveilings', 'Fashion & Beauty Reveals', 'Corporate Rebranding Events'),
            'approach' => array(
                array('title' => 'Building Suspense', 'text' => 'Generating excitement around the upcoming reveal throughout the room.', 'icon' => 'sparkles'),
                array('title' => 'The Big Unveil', 'text' => 'Guiding the dramatic countdown and welcoming key executives to stage.', 'icon' => 'party-popper'),
                array('title' => 'Interactive Q&A', 'text' => 'Facilitating media questions and concluding with product experience sessions.', 'icon' => 'users'),
            ),
        ),

        'outdoor-sports-emcee' => array(
            'badge' => 'Outdoor Sports Emcee',
            'title_prefix' => 'Unstoppable Energy.',
            'title_gradient' => 'High-Spirited Team Days.',
            'description' => 'Dynamic outdoor anchoring that energizes players, rallies team spirit, and keeps audiences on their feet from start to finish.',
            'subtext' => 'Whether running a corporate cricket league, marathon, or annual family sports fest, Trupti keeps the commentary sharp and the excitement roaring.',
            'image' => $theme_uri . '/assets/sports.jpeg',
            'highlights' => array(
                array('title' => 'Live Play-by-Play Comment', 'text' => 'Spirited, engaging commentary that highlights every athletic effort.', 'icon' => 'medal'),
                array('title' => 'Cheering & Crowd Energy', 'text' => 'Rallying teams, chants, and supporters across the field.', 'icon' => 'users'),
                array('title' => 'Award Ceremonies', 'text' => 'Medal presentations, trophy reveals, and sportsmanship celebrations.', 'icon' => 'trophy'),
            ),
            'eventTypes' => array('Corporate Cricket Leagues', 'Company Sports Days', 'Marathons & Cyclothons', 'Team Building Olympics', 'School & College Sports Meets'),
            'approach' => array(
                array('title' => 'Morning Motivation', 'text' => 'Rallying participants, warm-up sessions, and sportsmanship oaths.', 'icon' => 'medal'),
                array('title' => 'Field Action Commentary', 'text' => 'Keeping energy soaring across multiple sports arenas and pitches.', 'icon' => 'sparkles'),
                array('title' => 'Victory Ceremony', 'text' => 'Honoring winners, best players, and celebrating team spirit on the podium.', 'icon' => 'trophy'),
            ),
        ),

        'wedding-emcee-mumbai' => array(
            'badge' => 'Wedding Emcee Mumbai',
            'title_prefix' => 'Your Love Story.',
            'title_gradient' => 'A Royal Wedding Experience.',
            'description' => 'Warm, witty and emotionally resonant hosting that weaves together families, friends, and magical wedding moments.',
            'subtext' => 'From grand ballroom receptions to royal destination celebrations, Trupti Shah brings the perfect balance of dignity, romance, and entertainment.',
            'image' => $theme_uri . '/assets/weddingemcee.jpeg',
            'highlights' => array(
                array('title' => 'Warm & Personal', 'text' => 'Create a welcoming atmosphere where every family member and guest feels connected.', 'icon' => 'heart'),
                array('title' => 'Fun & Interactive', 'text' => 'Entertain guests with couple trivia, spontaneous moments, and joyous announcements.', 'icon' => 'sparkles'),
                array('title' => 'Seamless Coordination', 'text' => 'Keep every ceremony, performance and schedule moving forward with poise.', 'icon' => 'mic2'),
            ),
            'eventTypes' => array('Grand Wedding Receptions', 'Varmala & Phera Ceremonies', 'Cocktail Soirees', 'Destination Weddings', 'Post-Wedding Celebrations'),
            'approach' => array(
                array('title' => 'Welcome & Connect', 'text' => 'Set the tone with a warm welcome and create an instant connection with all guests.', 'icon' => 'heart'),
                array('title' => 'Entertain & Engage', 'text' => 'Keep the celebration lively through performances, toasts and romantic milestones.', 'icon' => 'sparkles'),
                array('title' => 'Celebrate The Couple', 'text' => 'Spotlight the newlyweds and craft memories they will treasure for a lifetime.', 'icon' => 'party-popper'),
            ),
        ),
    );

    return $services[$slug] ?? null;
}
