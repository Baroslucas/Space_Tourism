import s from './PlanetDescription.module.css'

export function PlanetDescription({title, description}) {
    return (
        <div className={s.div}>
            <h1 className={s.h1}>{title}</h1>
            <p className={s.p}>{description}</p>
        </div>
    )
}