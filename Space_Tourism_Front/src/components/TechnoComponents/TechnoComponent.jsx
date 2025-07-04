import { useEffect, useState } from 'react';
import TechnoImg from './TechnoImg/TechnoImg';
import TechnoSwitchBtn from './TechnoSwitchBtn/TechnoSwitchBtn';
import { TechnoDescription } from './TechnoDescription/TechnoDescription';
import { Title } from '../GlobalComponents/Title/Title';

export function TechnoComponent() {
  const apiUrl = import.meta.env.VITE_API_URL;
  const [technologies, setTechnologies] = useState([]);
  const [selectedId, setSelectedId] = useState(null);

  useEffect(() => {
    fetch(`${apiUrl}/technologies`)
      .then(res => res.json())
      .then(data => {
        setTechnologies(data);
        if (data.length > 0) setSelectedId(data[0].id);
      })
      .catch(console.error);
  }, []);

  console.log("technologies : ", technologies);

  if (technologies.length === 0) return <div>Loading...</div>;

  const selectedTechnology = technologies.find(t => t.id === selectedId);
  const imageUrl = selectedTechnology ? `http://localhost:8000/${selectedTechnology.image_url}` : '';

  return (
    <div>
      <Title number="03" text="SPACE LAUNCH 101" /> 
      {selectedTechnology && (
        <>
          <TechnoImg imageUrl={imageUrl} />
          <TechnoSwitchBtn
            technologies={technologies}
            selectedId={selectedId}
            onSelect={setSelectedId}
          />
          <TechnoDescription name={selectedTechnology.name} description={selectedTechnology.description} />
        </>
      )}
    </div>
  );
}
