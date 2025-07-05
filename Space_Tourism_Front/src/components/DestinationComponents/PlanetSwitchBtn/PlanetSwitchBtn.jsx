import s from './PlanetSwitchBtn.module.css'

export default function PlanetSwitchBtn({ destinations, selectedId, onSelect }) {
  return (
    <div className={s.div}>
      {destinations.map(dest => (
        <button
          className={`${s.btn} ${dest.id === selectedId ? s.active : ""}`}
          key={dest.id}
          onClick={() => onSelect(dest.id)}
          aria-pressed={dest.id === selectedId}
        >
          {dest.name}
        </button>
      ))}
    </div>
  );
}
