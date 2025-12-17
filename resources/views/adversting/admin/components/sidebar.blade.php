<aside class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-200">
    {{-- BRAND --}}
    <div class="h-16 flex items-center px-6 font-bold text-lg border-b">
        RG Admin
    </div>

    <nav class="px-4 py-6 space-y-1 text-sm">
        {{-- Dashboard --}}
        <a
            href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 px-4 py-2 rounded-lg
           {{ request()->routeIs('admin.dashboard')
              ? 'bg-blue-50 text-blue-600 font-semibold'
              : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Dashboard
        </a>

        {{-- CONTENT --}}
        <div
            class="mt-6 mb-2 px-4 text-xs text-gray-400 uppercase tracking-wide"
        >
            Konten Website
        </div>

        <a
            href="{{ route('admin.content.home') }}"
            class="block px-4 py-2 rounded-lg
           {{ request()->routeIs('admin.content.home')
              ? 'bg-blue-50 text-blue-600 font-semibold'
              : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Home
        </a>

        <a
            href="{{ route('admin.content.about') }}"
            class="block px-4 py-2 rounded-lg
            {{ request()->routeIs('admin.content.about')
                ? 'bg-blue-50 text-blue-600 font-semibold'
                : 'text-gray-600 hover:bg-gray-100' }}"
        >
            About
        </a>

        <a
            href="{{ route('admin.content.services') }}"
            class="block px-4 py-2 rounded-lg
           {{ request()->routeIs('admin.content.services')
              ? 'bg-blue-50 text-blue-600 font-semibold'
              : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Services
        </a>

        <a
            href="{{ route('admin.content.contact') }}"
            class="block px-4 py-2 rounded-lg
           {{ request()->routeIs('admin.content.contact')
              ? 'bg-blue-50 text-blue-600 font-semibold'
              : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Contact
        </a>

        {{-- SETTINGS --}}
        <div
            class="mt-6 mb-2 px-4 text-xs text-gray-400 uppercase tracking-wide"
        >
            Pengaturan
        </div>

        <a
            href="{{ route('admin.settings') }}"
            class="block px-4 py-2 rounded-lg
           {{ request()->routeIs('admin.settings')
              ? 'bg-blue-50 text-blue-600 font-semibold'
              : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Settings
        </a>

        {{-- WEBSITE --}}
        <div class="mt-6">
            <a
                href="{{ route('home') }}"
                target="_blank"
                class="block px-4 py-2 text-gray-500 hover:text-blue-600"
            >
                Lihat Website
            </a>
        </div>
    </nav>
</aside>
