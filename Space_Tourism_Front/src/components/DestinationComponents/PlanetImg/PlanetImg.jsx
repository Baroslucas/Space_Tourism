
export default function PlanetImg({ imageUrl}) {
  return (
    <div>
      <img src={imageUrl} style={{ maxWidth: '100%', height: 'auto' }} />
    </div>
  );
}
