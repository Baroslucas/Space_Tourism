import { useState, useEffect } from "react";
import { CrewImg } from "./CrewImg/CrewImg";
import { CrewDescription } from "./CrewDescription/CrewDescription";
import { Title } from "../GlobalComponents/Title/Title";

export function CrewComponent() {
  const apiUrl = import.meta.env.VITE_API_URL;
  const [crewMembers, setCrewMembers] = useState([]);
  const [selectedId, setSelectedId] = useState(null);

  useEffect(() => {
    fetch(`${apiUrl}/crews`)
      .then(res => res.json())
      .then(data => {
        setCrewMembers(data);
        if (data.length > 0) setSelectedId(data[0].id);
      })
      .catch(console.error);
  }, []);

  console.log("crew : ", crewMembers)

  if (crewMembers.length === 0) return <div>Loading...</div>;

  const selectedCrew = crewMembers.find(c => c.id === selectedId);
  const imageUrl = selectedCrew ? `http://localhost:8000/${selectedCrew.image_url}` : '';

  return (
    <div>
        <Title number="02" text="MEET YOUR CREW" />
      {selectedCrew && (
        <>
          <CrewImg imageUrl={imageUrl} />
          <CrewDescription role={selectedCrew.role} name={selectedCrew.name} bio={selectedCrew.bio} />
        </>
      )}
    </div>
  );
}
