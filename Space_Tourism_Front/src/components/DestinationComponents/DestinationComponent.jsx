import { useEffect, useState } from 'react';
import PlanetImg from './PlanetImg/PlanetImg';
import PlanetSwitchBtn from './PlanetSwitchBtn/PlanetSwitchBtn';
import { PlanetDescription } from './PlanetDescription/PlanetDescription';
import { PlanetDistanceInfo } from './PlanetDistanceInfo/PlanetDistanceInfo';
import { Title } from '../GlobalComponents/Title/Title';
import s from './DestinationComponent.module.css'

export function DestinationComponent() {
  const apiUrl = import.meta.env.VITE_API_URL;
  const [destinations, setDestinations] = useState([]);
  const [selectedId, setSelectedId] = useState(null);

  useEffect(() => {
    fetch(`${apiUrl}/destinations`)
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
    <div className={s.div}>
      <Title number="01" text="PICK YOUR DESTINATION" />
        
      {selectedDestination && (
        <>
        <div className={s.gridContainer}>
        <div className={s.imgContainer}>
          <PlanetImg imageUrl={imageUrl} />
        </div>
        <div className={s.textContainer}>
          <PlanetSwitchBtn
            destinations={destinations}
            selectedId={selectedId}
            onSelect={setSelectedId}
          />
          <PlanetDescription title={selectedDestination.name} description={selectedDestination.description} />
          <PlanetDistanceInfo distance={selectedDestination.distance} travel_time={selectedDestination.travel_time} />
        </div>
        </div>
        </>
      )}
    </div>
  );
}
