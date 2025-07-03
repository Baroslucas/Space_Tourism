export function PlanetDistanceInfo({distance, travel_time}) {
    return (
        <div>
            <div>
                <p>AVG. DISTANCE</p>
                <p>{distance}</p>
            </div>
            <div>
                <p>EST. TRAVEL TIME</p>
                <p>{travel_time}</p>
            </div>
        </div>
    )
}