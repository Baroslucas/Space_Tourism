export function CrewDescription({role, name, bio}) {
    return (
        <div>
            <p>{role}</p>
            <h3>{name}</h3>
            <p>{bio}</p>
        </div>
    )
}