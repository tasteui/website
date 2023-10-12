<x-layout>
    <x-slot:title>
        Avatar
    </x-slot:title>
    <x-slot:description>
        Dropdown component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="dropdown" />
        <livewire:documentation.personalization component="dropdown.items" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$left">
            <div class="flex justify-end md:justify-center">
                <x-dropdown text="Menu">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Right Side"
                   language="blade"
                   :contents="$right">
            <div class="flex justify-start md:justify-center">
                <x-dropdown text="Menu" right>
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Usage"
                   language="blade"
                   :contents="$icons">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down">
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Usage Animated"
                   language="blade"
                   :contents="$animations">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down" animate>
                    <x-dropdown.items text="Settings" />
                    <x-dropdown.items text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   language="blade"
                   :contents="$iconSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown icon="chevron-down" animate>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Action Slot"
                   language="blade"
                   :contents="$actionSlots">
            <div class="flex justify-end md:justify-center">
                <x-dropdown>
                    <x-slot:action>
                        <x-button x-on:click="show = !show" sm outline>Open</x-button>
                    </x-slot:action>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </x-preview>
    </x-section>
</x-layout>