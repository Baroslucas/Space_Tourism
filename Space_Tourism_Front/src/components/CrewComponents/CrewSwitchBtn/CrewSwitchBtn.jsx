import s from './CrewSwitchBtn.module.css'

export default function CrewSwitchBtn({ crewMembers, selectedId, onSelect }) {
  return (
    <div className={s.div}>
      {crewMembers.map(member => (
        <button
          className={`${s.btn} ${member.id === selectedId ? s.active : ''}`}
          key={member.id}
          onClick={() => onSelect(member.id)}
          aria-pressed={member.id === selectedId}
        >
        </button>
      ))}
    </div>
  );
}