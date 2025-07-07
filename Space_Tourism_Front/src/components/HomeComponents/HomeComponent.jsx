import { useNavigate } from 'react-router-dom'
import s from "./HomeComponent.module.css"
export function HomeComponent() {
    const navigate = useNavigate();

    function handleClick() {
        navigate('/destination')
    }

    return (
        <div className={s.div}>
            <div className={s.divText}>
                <p className={s.firstP}>SO, YOU WANT TO TRAVEL TO</p>
                <h1 className={s.h1}>SPACE</h1>
                <p className={s.secondP}>Let’s face it; if you want to go to space, you might as well genuinely go to outer space and not hover kind of on the edge of it. Well sit back, and relax because we’ll give you a truly out of this world experience!
                </p>
            </div>
            <div>
                <button className={s.btn} onClick={handleClick}>EXPLORE</button>
            </div>
            
        </div>
    )
}