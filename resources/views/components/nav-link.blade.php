@props(['href', 'active'])

<a href="{{ $href }}"
   class="{{ request()->routeIs($active) ? 'flex items-center text-orange-600 dark:text-orange-400 bg-white dark:bg-slate-900 rounded-l-full ml-4 pl-6 py-3 shadow-sm translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg' : 'flex items-center text-slate-500 dark:text-slate-400 px-10 py-3 hover:text-orange-500 dark:hover:text-orange-300 transition-all translate-x-1 hover:translate-x-2 transition-transform font-headline font-bold text-lg' }}">
    {{  $slot }}
</a>