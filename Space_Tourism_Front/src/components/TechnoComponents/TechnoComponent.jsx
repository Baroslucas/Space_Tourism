import { useEffect, useState } from 'react';
import TechnoImg from './TechnoImg/TechnoImg';
import TechnoSwitchBtn from './TechnoSwitchBtn/TechnoSwitchBtn';
import { TechnoDescription } from './TechnoDescription/TechnoDescription';
import { Title } from '../GlobalComponents/Title/Title';
import s from './TechnoComponent.module.css'
import { useMediaQuery } from '../../utils/utils';

export function TechnoComponent() {
  const apiUrl = import.meta.env.VITE_API_URL;
  const [technologies, setTechnologies] = useState([]);
  const [selectedId, setSelectedId] = useState(null);
  const isDesktop = useMediaQuery("(min-width: 1280px")
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
  const imageUrl = selectedTechnology
  ? `http://localhost:8000/${
      isDesktop
        ? selectedTechnology.image_url
        : selectedTechnology.image_landscape_url
    }`
  : '';

  return (
    <div className={s.section}>
      <Title number="03" text="SPACE LAUNCH 101" /> 
      {selectedTechnology && (
        <div className={s.div}>
          <div className={s.imgContainer}>
            <TechnoImg 
              imageUrl={imageUrl}  
            />
          </div>
          <div className={s.btnContainer}>
            <TechnoSwitchBtn
              technologies={technologies}
              selectedId={selectedId}
              onSelect={setSelectedId}
            />
          </div>
          <div className={s.descriptionContainer}>
            <TechnoDescription 
              name={selectedTechnology.name} 
              description={selectedTechnology.description} 
            />
          </div>
        </div>
      )}
    </div>
  );
}
