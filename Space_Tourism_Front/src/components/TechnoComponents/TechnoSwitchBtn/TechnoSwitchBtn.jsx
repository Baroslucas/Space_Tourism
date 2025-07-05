import s from "./TechnoSwitchBtn.module.css"

export default function TechnoSwitchBtn({ technologies, selectedId, onSelect }) {
  return (
    <div className={s.div}>
      {technologies.map((tech, index) => (
        <button
          className={`${s.btn} ${tech.id === selectedId ? s.active : ""}`}
          key={tech.id}
          onClick={() => onSelect(tech.id)}
          aria-pressed={tech.id === selectedId}
        >
          {index + 1}
        </button>
      ))}
    </div>
  );
}
