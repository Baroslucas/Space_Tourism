import { Link } from "react-router-dom";
import { useState } from "react";
import s from "./Header.module.css"

export function Header() {
    const space_logo = "/assets/img/space_tourism_logo.png";
    const burger_logo = "/assets/img/burger_icon.png";
    const close_logo = "/assets/img/close_icon.png";

    const [menuOpen, setMenuOpen] = useState(false);

    return (
        <div className={s.header}>
            <Link to="/">
                <img src={space_logo} alt="Logo space tourism" className={s.logo} />
            </Link>

            {/* Nav pour tablette et desktop */}
            <nav className={s.desktopNav}>
                <ul>
                    <li>
                        <Link to="/">
                            <span>00</span> HOME
                        </Link>
                    </li>
                    <li>
                        <Link to="/destination">
                            <span>01</span> DESTINATION
                        </Link>
                    </li>
                    <li>
                        <Link to="/crew">
                            <span>02</span> CREW
                        </Link>
                    </li>
                    <li>
                        <Link to="/technology">
                            <span>03</span> TECHNOLOGY
                        </Link>
                    </li>
                </ul>
            </nav>

            {/* burgerBtn pour mobile */}
            <button onClick={() => setMenuOpen(true)} className={s.burgerBtn}>
                <img src={burger_logo} alt="Logo menu burger" />
            </button>

            {/* Menu latéral mobile */}
            <div className={`${s.sideMenu} ${menuOpen ? s.sideMenuOpen : ""}`}>
                <button
                    onClick={() => setMenuOpen(false)}
                    className={s.closeBtn}
                >
                    <img src={close_logo} alt="Fermer le menu" />
                </button>
                <nav>
                    <ul>
                        <li>
                            <Link to="/" onClick={() => setMenuOpen(false)}>
                                <span>00</span> HOME
                            </Link>
                        </li>
                        <li>
                            <Link to="/destination" onClick={() => setMenuOpen(false)}>
                                <span>01</span> DESTINATION
                            </Link>
                        </li>
                        <li>
                            <Link to="/crew" onClick={() => setMenuOpen(false)}>
                                <span>02</span> CREW 
                            </Link>
                        </li>
                        <li>
                            <Link to="/technology" onClick={() => setMenuOpen(false)}>
                                <span>03</span> TECHNOLOGY
                            </Link>
                        </li>
                    </ul>
                </nav>
            </div>

            {/* Overlay pour assombrir l'écran derrière */}
            {menuOpen && <div className={s.backdrop} onClick={() => setMenuOpen(false)}></div>}
        </div>
    );
}
