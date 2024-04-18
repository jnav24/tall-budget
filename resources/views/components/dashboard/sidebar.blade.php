@props(['title' => ''])

<div class="py-4 hidden md:block">
    <p class="mb-6 text-lg text-gray-700 font-body">{{ $title }}</p>

    <ul>
        <template x-for="(label, i) in sidebarItems">
            <li
                :key="i"
                class="flex flex-row items-center justify-between"
                :class="{
					'text-gray-500 text-sm hover:text-gray-700 hover:bg-gray-100 cursor-pointer px-2 py-2':
						label !== selectedSidebar,
					'text-gray-700 text-sm cursor-pointer px-2 py-2 bg-gray-300 rounded':
						label === selectedSidebar,
				}"
                @click="selectedSidebar = label"
            >
                <span x-text="label"></span>
                <span class="bg-danger text-white text-center rounded-full h-6 min-w-6 flex items-center justify-center">1</span>
            </li>
        </template>
    </ul>
</div>
