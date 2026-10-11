import { useState, useEffect } from "react";

// Read data injected by WordPress in wp_head
export function getWpData() {
  if (typeof window !== "undefined" && window.truptiWpData) {
    return window.truptiWpData;
  }
  return null;
}

export function useWpData() {
  const [data, setData] = useState(() => getWpData());

  useEffect(() => {
    // If not already injected (e.g. SPA navigation or local dev), fetch from REST API
    if (!data) {
      fetch("/wp-json/trupti/v1/content")
        .then((res) => {
          if (res.ok) return res.json();
          throw new Error("Failed to load WP data");
        })
        .then((json) => {
          if (json && json.success && json.data) {
            setData(json.data);
            if (typeof window !== "undefined") {
              window.truptiWpData = json.data;
            }
          }
        })
        .catch(() => {
          // Silent fallback to local hardcoded defaults
        });
    }
  }, [data]);

  return data;
}

export function useSiteOptions() {
  const data = useWpData();
  return {
    phone: data?.options?.phone || "+91 9820359087",
    whatsapp: data?.options?.whatsapp || "919820359087",
    email: data?.options?.email || "trupti@truptiemcee.com",
    address:
      data?.options?.address ||
      "Studio 10, 10th Floor, Navjivan Commercial Bldg No 3, Grant Road (E), Mumbai, India",
    facebook: data?.options?.facebook || "https://www.facebook.com/WeddingSangeetChoreographer/",
    instagram: data?.options?.instagram || "https://www.instagram.com/",
    youtube: data?.options?.youtube || "https://www.youtube.com/",
  };
}

export function usePageData(slug) {
  const data = useWpData();
  return data?.pages?.[slug] || {};
}
