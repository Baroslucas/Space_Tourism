import { useEffect, useState } from "react";

export function useMediaQuery(query) {
    const [matches, setMatches] = useState(
        () => window.matchMedia(query).matches
    );

    useEffect(() => {
        const mediaQueryList = window.matchMedia(query);
        const listener = (e) => setMatches(e.matches);
        mediaQueryList.addEventListener("change", listener);
        return () => mediaQueryList.removeEventListener("change", listener);
    }, [query]);

    return matches;
}
