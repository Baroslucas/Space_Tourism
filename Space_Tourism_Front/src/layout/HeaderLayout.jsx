import { Header } from "../components/GlobalComponents/Header/Header";
import { Outlet } from 'react-router-dom';

export function HeaderLayout() {
    return (
        <>
            <Header />
            <main>
                <Outlet />
            </main>
        
        </>
    )
}