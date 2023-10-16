<style>
    #cardProductAll {
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    #cardProductAll .card {
        display: flex;
        flex-direction: column;
        position: relative;
        width: 310px;
        height: 400px;
        box-shadow: -1px 15px 30px -12px rgb(32, 32, 32);
        border-radius: 0.9rem;
        color: var(--text);
        cursor: pointer;
        margin: 70px 20px 20px 10px;
    }

    #cardProductAll .card-img-top {
        margin-top: 50px;
    }

    #cardProductAll .product-image {
        display: flex;
        justify-content: center;
        height: 230px;
        width: 100%;
        transform: translate(0, -1.5rem);
        transition: transform 500ms ease-in-out;
    }

    #cardProductAll .product-info {
        text-align: center;
        text-transform: capitalize;
    }

    #cardProductAll .product-info .nameSneakers {
        color: black;
        font-weight: bold;
    }

    #cardProductAll .product-info .nameMarque {
        color: red;
        text-transform: uppercase;
        margin-top: 20pxWA;
    }

    #cardProductAll .card:hover .product-image {
        transform: translate(-1.5rem, -7rem) rotate(-20deg);
    }

    #cardProductAll .product-info h2 {
        font-size: 1.4rem;
        font-weight: 600;
    }

    #cardProductAll .product-info p {
        margin: 0.4rem;
        font-size: 0.8rem;
        font-weight: 600;
    }

    #cardProductAll .price {
        font-size: 1.2rem;
        font-weight: 500;
        margin-top: 30px;
    }


    @media screen and (max-width: 800px) {
        body {
            height: auto;
        }

        #cardProductAll {
            padding: 2rem 0;
            width: 100%;
            flex-direction: column;
            gap: 3rem;
        }
    }
</style>