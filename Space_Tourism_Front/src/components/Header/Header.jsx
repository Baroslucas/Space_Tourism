export function Header() {

    const space_logo = "/assets/img/space_tourism_logo.png"
    const burger_logo = "/assets/img/burger_icon.png"

    return (
        <div>
            <button>
                <img src={space_logo} alt="Logo space tourism" />
            </button>
            <button>
                <img src={burger_logo} alt="Logo menu berger" />
            </button>
        </div>
    )
}