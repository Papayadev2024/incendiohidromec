<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Mensaje de {{$message->full_name}}</h2>
            </header>
            <div class="">
        
                <div class="px-6 pb-6 overflow-x-auto">
                 
                    <table class="w-full border-collapse my-8">
                       
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2 font-bold text-[16px]">Nombre completo</td>
                                <td class="border px-4 py-2 text-[15px]">{{$message->name}}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 font-bold text-[16px]">Teléfono</td>
                                <td class="border px-4 py-2 text-[15px]">{{$message->cellphone}}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 font-bold text-[16px]">Correo</td>
                                <td class="border px-4 py-2 text-[15px]">{{$message->email}}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 font-bold text-[16px]">DNI</td>
                                <td class="border px-4 py-2 text-[15px]">{{$message->document}}</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 font-bold text-[16px]">Mensaje</td>
                                <td class="border px-4 py-2 text-[15px]">{{$message->address}}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                

                    <a href="{{route('mensajes.index')}}" class=" bg-blue-500 px-4 py-2 rounded text-white"><span><i class="fa-solid fa-arrow-left mr-2"></i></span> Volver</a>
        
                </div>
            
            </div>
        </div>   

    </div>

    

</x-app-layout>
