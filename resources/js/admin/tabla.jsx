import '../css/admin/Tabla.scss';

const Tabla = () => {
    return (
        <div class="h-full w-full rounded-xl bg-white">
            <div class="grid w-full grid-cols-5 items-center gap-4 p-4 pb-2 text-xs font-semibold text-gray-400">
                <div class="space-x-4">
                    <input type="checkbox" name="all" id="select-all" class="select-all-checkbox" />
                    <span>Nom</span>
                </div>
                <span>Descripció</span>
                <span>Responsable</span>
                <span>Tipus</span>
                <span>Data</span>
            </div>

            <div class="flex flex-col" id="documents-container">
                {/*<div class="py-12 text-center">
                    <p class="mb-4 text-lg text-gray-500">No hi ha documents registrats.</p>
                </div>*/}
                
                <a href="#" class="grid cursor-pointer grid-cols-5 items-center gap-4 border-t border-gray-200 p-4 transition duration-300 ease-in-out hover:bg-orange-50">
                    <div class="space-x-4">
                        <input type="checkbox" name="" id="" value="1" />
                        <span>Document Exemple 1</span>
                    </div>
                    <span class="truncate text-gray-400">Descripció breu del document...</span>
                    <span class="truncate text-sm">Joan Pérez</span>
                    <span class="w-fit rounded-full bg-blue-100 px-3 pt-1 pb-[3px] text-xs font-semibold text-blue-700">PDF</span>
                    <span class="text-sm font-semibold text-gray-400">12/02/2026</span>
                </a>
            </div>
        </div>
    )
}

export default Tabla