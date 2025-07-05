import { HomeComponent } from "../../components/HomeComponents/HomeComponent";
import s from './HomePage.module.css'
export function HomePage() {
    return (
        <div className={s.div}>
            <HomeComponent />
        </div>
    )
}