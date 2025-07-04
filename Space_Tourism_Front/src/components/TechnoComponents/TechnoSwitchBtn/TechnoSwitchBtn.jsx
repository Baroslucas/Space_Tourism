export default function TechnoSwitchBtn({ technologies, selectedId, onSelect }) {
  return (
    <div>
      {technologies.map((tech, index) => (
        <button
          key={tech.id}
          onClick={() => onSelect(tech.id)}
          style={{
            fontWeight: tech.id === selectedId ? 'bold' : 'normal',
            marginRight: 8,
            cursor: 'pointer'
          }}
          aria-pressed={tech.id === selectedId}
        >
          {index + 1}
        </button>
      ))}
    </div>
  );
}
