import s from './PlanetDistanceInfo.module.css'

export function PlanetDistanceInfo({distance, travel_time}) {
    return (
        <div className={s.div}>
            <div className={s.divDistance}>
                <p className={s.titleInfo}>AVG. DISTANCE</p>
                <p className={s.numberInfo}>{distance}</p>
            </div>
            <div>
                <p className={s.titleInfo}>EST. TRAVEL TIME</p>
                <p className={s.numberInfo}>{travel_time}</p>
            </div>
        </div>
    )
}