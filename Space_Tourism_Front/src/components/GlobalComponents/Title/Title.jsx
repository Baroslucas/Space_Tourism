import s from './Title.module.css'

export function Title({number, text}) {
    return (
        <div className={s.div}>
            <p className={s.number}>{number}</p>
            <p className={s.text}>{text}</p>
        </div>
    )
}