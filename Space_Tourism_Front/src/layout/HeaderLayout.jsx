import { Header } from "../components/GlobalComponents/Header/Header";
import { Outlet, useLocation } from 'react-router-dom';


export function HeaderLayout({}) {
    const location = useLocation();
    const backgrounds = {
        '/':'assets/img/home_background.png',
        '/destination':'assets/img/destination_background.png',
        '/crew':'assets/img/crew_background.png',
        '/technology':'assets/img/techno_background.png'
    }

    const currentBg = backgrounds[location.pathname] || "";

    const style = {
        backgroundImage: `url(${currentBg})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        minHeight: '100vh',
        width: '100%',
    }
    return (
        <div style={style}>
            <Header />
            <main>
                <Outlet />
            </main>
        
        </div>
    )
}