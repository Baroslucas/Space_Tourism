export default function TechnoImg({ imageUrl}) {
  return (
    <div>
      <img src={imageUrl} style={{ maxWidth: '100%', height: 'auto' }} />
    </div>
  );
}