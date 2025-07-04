
export default function PlanetSwitchBtn({ destinations, selectedId, onSelect }) {
  return (
    <div>
      {destinations.map(dest => (
        <button
          key={dest.id}
          onClick={() => onSelect(dest.id)}
          style={{
            fontWeight: dest.id === selectedId ? 'bold' : 'normal',
            marginRight: 8,
            cursor: 'pointer'
          }}
          aria-pressed={dest.id === selectedId}
        >
          {dest.name}
        </button>
      ))}
    </div>
  );
}
