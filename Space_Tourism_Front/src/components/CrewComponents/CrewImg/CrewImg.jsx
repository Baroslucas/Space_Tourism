import s from './CrewImg.module.css'

export function CrewImg({imageUrl}) {
    return (
        <div className={s.div}>
            <img src={imageUrl} className={s.img} />
        </div>
    )
}