export default function CrewSwitchBtn({ crewMembers, selectedId, onSelect }) {
  return (
    <div style={{ display: 'flex', gap: '8px' }}>
      {crewMembers.map(member => (
        <button
          key={member.id}
          onClick={() => onSelect(member.id)}
          style={{
            width: '12px',
            height: '12px',
            borderRadius: '50%',
            backgroundColor: member.id === selectedId ? '#fff' : 'rgba(255, 255, 255, 0.3)',
            border: 'none',
            cursor: 'pointer'
          }}
          aria-pressed={member.id === selectedId}
        >
        </button>
      ))}
    </div>
  );
}