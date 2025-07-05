import s from './TechnoDescription.module.css'

export function TechnoDescription({name, description}) {
    return (
        <div className={s.div}>
            <p className={s.title}>THE TERMINOLOGY ...</p>
            <h2 className={s.name}>{name}</h2>
            <p className={s.description}>{description}</p>
        </div>
    )
}