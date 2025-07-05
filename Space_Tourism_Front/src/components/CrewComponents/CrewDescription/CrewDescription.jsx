import s from './CrewDescription.module.css'

export function CrewDescription({role, name, bio}) {
    return (
        <div className={s.div}>
            <p className={s.role}>{role}</p>
            <h3 className={s.name}>{name}</h3>
            <p className={s.bio}>{bio}</p>
        </div>
    )
}