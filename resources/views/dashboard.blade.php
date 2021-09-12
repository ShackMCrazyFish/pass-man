<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Проекты</h1>
                    <table>
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Название</td>
                            <td>Адрес</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Проект №1</td>
                            <td><a href="/">www.project1.com</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Проект №2</td>
                            <td><a href="/">www.project2.com</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Проект №3</td>
                            <td><a href="/">www.project3.com</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Проект №4</td>
                            <td><a href="/">www.project4.com</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Проект №5</td>
                            <td><a href="/">www.project5.com</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
