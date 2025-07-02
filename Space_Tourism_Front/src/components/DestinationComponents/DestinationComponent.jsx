// DestinationComponent.jsx
import { useEffect, useState } from 'react';
import PlanetImg from './PlanetImg/PlanetImg';
import PlanetSwitchBtn from './PlanetSwitchBtn/PlanetSwitchBtn';

export function DestinationComponent() {
  const [destinations, setDestinations] = useState([]);
  const [selectedId, setSelectedId] = useState(null);

  useEffect(() => {
    fetch('http://localhost:8000/api/destinations')
      .then(res => res.json())
      .then(data => {
        setDestinations(data);
        if(data.length > 0) setSelectedId(data[0].id);
      })
      .catch(console.error);
    }, []);
    console.log("destination : ", destinations)

  if(destinations.length === 0) return <div>Loading...</div>;

  const selectedDestination = destinations.find(d => d.id === selectedId);
  const imageUrl = selectedDestination ? `http://localhost:8000/${selectedDestination.image_url}` : '';

  return (
    <div>
        <PlanetSwitchBtn
        destinations={destinations}
        selectedId={selectedId}
        onSelect={setSelectedId}
      />
      {selectedDestination && (
        <>
          <PlanetImg imageUrl={imageUrl} />
          {/* autres sous-composants avec selectedDestination */}
        </>
      )}
    </div>
  );
}
