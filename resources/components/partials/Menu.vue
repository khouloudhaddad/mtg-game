<template>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a
                aria-label="← Back to the homepage"
                title="← Back to the homepage"
                href="/"
                class="navbar-brand"
                ><picture
                    ><source
                        srcset="
                            //images.ctfassets.net/s5n2t79q9icq/3dB5uyWzUH95O1ZPBNNUX5/6cff7c65a809285755ea24b164b6ac65/magic-logo.png?fm=webp
                        "
                        type="image/webp" />
                    <img
                        src="//images.ctfassets.net/s5n2t79q9icq/3dB5uyWzUH95O1ZPBNNUX5/6cff7c65a809285755ea24b164b6ac65/magic-logo.png"
                        alt="Magic The Gathering Logo"
                        class="img-fluid" /></picture
            ></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            >Cards</a
                        >
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="#"
                            tabindex="-1"
                            aria-disabled="true"
                            >Sets</a
                        >
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Play</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Menu",
};
</script>

<style lang="scss" scoped>
@import '../../sass/_variables.scss';
nav {
    background: $primary;
    .navbar-brand {
        width: 115px;
        &:hover{
            filter: drop-shadow(0 0 8px var(--theme-link-color,#ea3601));
        }
    }
}
button:focus:not(:focus-visible){
    box-shadow: none;
}
</style>
