<style>
    .accordions__wrapper {
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 564px;
    }

    .accordions__wrapper .accordion {
        text-align: left;
        padding: 23px 49px;
        border: none;
        background-color: transparent;
        border-bottom: 0.5px solid #303030;
        cursor: pointer;
    }

    .accord--query {
        font-size: 15px;
        font-family: var(--font-bg);
        position: relative;
        text-transform: uppercase;
        transition: all 150ms ease-in-out;
    }

    .accord--query:hover {
        color: black;
        /* font-size: 18px; */
    }

    .accord--query::before,
    .accord--query::after {
        content: '';
        position: absolute;
        top: 50%;
        left: -45px;
        transform: translateY(-50%);
        width: 18px;
        height: 0.5px;
        background-color: #303030;
    }

    .accord--query::after {
        transform: rotate(90deg);
        transition: all 0.3s ease-in-out;
    }

    /* .accord--query:active::after,
    .accord--query:focus::after {
        transform: rotate(0deg);
    } 

        refactor this accordion later

    */

    .accordion[aria-expanded="true"] .accord--query::after {
        transform: rotate(0deg);
    }

    .accordion[aria-expanded="false"] .accord--query::after {
        transform: rotate(90deg);
    }

    .accordion[aria-expanded="false"] .accord--response {
        transition: display 0.5s ease;
        transition-delay: display 10s ease;
        display: none;
        animation: accordClose 0.5s forwards;
    }

    .accordion[aria-expanded="true"] .accord--response {
        max-height: 50vh;
        animation: accordOpen 0.5s forwards;
    }

    .accord--response {
        font-size: 15px;
        color: #7A7A7A;
        padding-top: 3px;
    }

    @keyframes accordClose {
        0% {
            transform: translateY(0px);
            height: 100%;
            opacity: 1;
            display: block;
        }

        50% {
            transform: translateY(-7.5px);
            height: 50%;
            opacity: 0.5;
        }

        100% {
            transform: translateY(-15px);
            opacity: 0;
            height: 0%;
            pointer-events: none;
            display: none;
        }
    }

    @keyframes accordOpen {
        0% {
            transform: translateY(-15px);
            height: 100%;
            opacity: 1;
            display: none;
        }

        50% {
            transform: translateY(-7.5px);
            opacity: 0.5;
            height: 50%;
        }

        100% {
            transform: translateY(0px);
            opacity: 1;
            height: 100%;
            pointer-events: auto;
            display: block;
        }
    }
</style>