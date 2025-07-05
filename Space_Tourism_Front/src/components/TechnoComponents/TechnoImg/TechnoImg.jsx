import s from './TechnoImg.module.css'

export default function TechnoImg({ imageUrl}) {
  return (
    <div className={s.div}>
      <img className={s.img} src={imageUrl} />
    </div>
  );
}