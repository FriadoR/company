<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-5 bg-indigo-200 shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">
        <a href="{{ route("home") }}" class="text-blue-500 text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Air companies</a><br>
        <span class="text-sm text-grey-dark">Fly with clear skies!</span>
            
                
    </div>
    <div class="sm:mb-0 self-center">

        
        <a href="{{ route("create") }}" class="text-md no-underline text-red-500 hover:text-blue-dark ml-2 px-1">Добавить компанию</a>
        
        
        <a href="/" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Компании</a>

        
        @auth("web")
        <a href="{{ route("logout") }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
        @endauth

        @guest("web")
        <a href="{{ route("login") }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>    
        @endguest  
        
        
    </div>
</nav>