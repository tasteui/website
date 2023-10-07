<x-layout>
    <x-slot:title>
        Modal
    </x-slot:title>
    <x-slot:description>
        Modal component.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <x-modal id="basic-modal">
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('basic-modal')">
                Open Modal
            </x-button>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Title Slot"
                        language="blade"
                        :contents="$title">
            <x-modal id="title-modal">
                <x-slot:title>
                    TallStackUi
                </x-slot:title>
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('title-modal')">
                Open Modal
            </x-button>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Footer Slot"
                        language="blade"
                        :contents="$footer">
            <x-modal id="footer-modal" title="TallStackUi">
                TallStackUi
                <x-slot:footer>
                    TallStackUi
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$modalOpen('footer-modal')">
                Open Modal
            </x-button>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Background Blur"
                        language="blade"
                        :contents="$blur">
            <x-modal id="blur-modal" title="TallStackUi" blur>
                TallStackUi
            </x-modal>
            <x-button x-on:click="$modalOpen('blur-modal')">
                Open Modal
            </x-button>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Size Variations"
                        language="blade"
                        :contents="$sizes">
            <x-modal id="default-size-modal" title="TallStackUi">
                Default (2xl)
            </x-modal>
            <x-modal id="sm-size-modal" title="TallStackUi" size="sm">
                sm
            </x-modal>
            <x-modal id="md-size-modal" title="TallStackUi" size="md">
                md
            </x-modal>
            <x-modal id="lg-size-modal" title="TallStackUi" size="lg">
                lg
            </x-modal>
            <x-modal id="xl-size-modal" title="TallStackUi" size="xl">
                xl
            </x-modal>
            <x-modal id="3xl-size-modal" title="TallStackUi" size="3xl">
                3xl
            </x-modal>
            <x-modal id="4xl-size-modal" title="TallStackUi" size="4xl">
                4xl
            </x-modal>
            <x-modal id="5xl-size-modal" title="TallStackUi" size="5xl">
                5xl
            </x-modal>
            <x-modal id="6xl-size-modal" title="TallStackUi" size="6xl">
                6xl
            </x-modal>
            <x-modal id="7xl-size-modal" title="TallStackUi" size="7xl">
                7xl
            </x-modal>
            <x-button x-on:click="$modalOpen('default-size-modal')">
                Default
            </x-button>
            <x-button x-on:click="$modalOpen('sm-size-modal')">
                sm
            </x-button>
            <x-button x-on:click="$modalOpen('md-size-modal')">
                md
            </x-button>
            <x-button x-on:click="$modalOpen('lg-size-modal')">
                lg
            </x-button>
            <x-button x-on:click="$modalOpen('xl-size-modal')">
                xl
            </x-button>
            <x-button x-on:click="$modalOpen('3xl-size-modal')">
                3xl
            </x-button>
            <x-button x-on:click="$modalOpen('4xl-size-modal')">
                4xl
            </x-button>
            <x-button x-on:click="$modalOpen('5xl-size-modal')">
                5xl
            </x-button>
            <x-button x-on:click="$modalOpen('6xl-size-modal')">
                6xl
            </x-button>
            <x-button x-on:click="$modalOpen('7xl-size-modal')">
                7xl
            </x-button>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Uncloseable"
                        description="An option to prevent the user from closing the modal when click outside."
                        language="blade"
                        :contents="$uncloseable">
            <x-modal id="uncloseable-modal" title="TallStackUi" :closeable="false">
                TallStackUi
                <x-slot:footer>
                    <x-button color="red" x-on:click="$modalClose('uncloseable-modal')">Close</x-button>
                </x-slot:footer>
            </x-modal>
            <x-button x-on:click="$modalOpen('uncloseable-modal')">
                Open
            </x-button>
        </x-code-preview>
    </x-section>
    <x-alert color="yellow" translucent>
        Make sure you provide some way to close the modal when using this option, such as a button within the modal.
    </x-alert>
    <x-section class="mt-2 space-y-2">
        <x-code-preview title="Wireable"
                        description="An option to control the modal entangled with a Livewire property."
                        language="blade"
                        :contents="$wireable">
            <livewire:documentation.modal.entangle />
        </x-code-preview>
        <x-code-preview title="Wireable Personalized"
                        description="An option to customize which property to use to control the modal entangled with a Livewire property."
                        language="blade"
                        :contents="$wireableCustomized">
            <livewire:documentation.modal.customentangle />
        </x-code-preview>
        <p>To open the modal using this option use the <a class="underline" href="https://livewire.laravel.com/docs/actions#toggle" target="_blank">Livewire toggle magic actions.</a></p>
    </x-section>
    <x-section>
        <x-code-preview title="AlpineJS Helper"
                        description="Helpers to open and close the modal using AlpineJS."
                        language="blade"
                        :contents="$alpinejs">
            AlpineJS helpers to open or close the modal. Check the code example.
        </x-code-preview>
    </x-section>
</x-layout>