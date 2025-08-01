import { Header } from "../components/GlobalComponents/Header/Header";
import { Outlet, useLocation } from 'react-router-dom';
import s from './HeaderLayout.module.css'
import { useMediaQuery } from "../utils/utils";


export function HeaderLayout({}) {
    const location = useLocation();
    const isTabletFormat = useMediaQuery('(min-width: 768px) and (max-width: 1279px)');
    const isDesktopFormat = useMediaQuery('(min-width: 1280px)');

  const backgrounds = {
    '/': {
      mobil: 'assets/img/home_background.png',
      tablet: 'assets/img/home_tablet_background.png',
      desktop: 'assets/img/home_desktop_background.png',
    },
    '/destination': {
      mobil: 'assets/img/destination_background.png',
      tablet: 'assets/img/destination_tablet_background.png',
      desktop: 'assets/img/destination_desktop_background.png',
    },
    '/crew': {
      mobil: 'assets/img/crew_background.png',
      tablet: 'assets/img/crew_tablet_background.png',
      desktop: 'assets/img/crew_desktop_background.png',
    },
    '/technology': {
      mobil: 'assets/img/techno_background.png',
      tablet: 'assets/img/techno_tablet_background.png',
      desktop: 'assets/img/techno_desktop_background.png',
    }
  };

  const routeBg = backgrounds[location.pathname];
  const currentBg = routeBg
    ? isDesktopFormat
      ? routeBg.desktop
      : isTabletFormat
        ? routeBg.tablet
        : routeBg.mobil
    : '';

    const styleBg = {
        backgroundImage: `url(${currentBg})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        minHeight: '100vh',
        width: '100%',
        maxWidth: "none",
    }
    return (
        <div className={`${s.layoutBackground}`} style={styleBg}>
            <Header />
            <main>
                <Outlet />
            </main>
        
        </div>
    )
}