import s from './PlanetImg.module.css'
export default function PlanetImg({ imageUrl}) {
  return (
    <div className={s.div}>
      <img src={imageUrl} style={{ maxWidth: '100%', height: 'auto' }} />
    </div>
  );
}
