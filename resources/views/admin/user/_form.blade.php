@csrf
<div class="mt-4">
    <label for="name" class="text-gray-400 font-medium text-sm position-absolute mb-1 inline-block">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="pear bg-secondary-lighter focus:outline-none py-2 px-2.5 rounded-lg text-gray-300 w-full">
    @error('name')
        <div class="text-rose-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="mt-4">
    <label for="email" class="text-gray-400 font-medium text-sm position-absolute mb-1 inline-block">Email</label>
    <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" class="pear bg-secondary-lighter focus:outline-none py-2 px-2.5 rounded-lg text-gray-300 w-full">
    @error('email')
        <div class="text-rose-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="mt-4">
    <label for="password" class="text-gray-400 font-medium text-sm position-absolute mb-1 inline-block">password</label>
    <input type="password" name="password" id="password" class="pear bg-secondary-lighter focus:outline-none py-2 px-2.5 rounded-lg text-gray-300 w-full">
    @error('password')
        <div class="text-rose-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="mt-4">
    <label for="password_confirmation" class="text-gray-400 font-medium text-sm position-absolute mb-1 inline-block">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="pear bg-secondary-lighter focus:outline-none py-2 px-2.5 rounded-lg text-gray-300 w-full">
    @error('password_confirmation')
        <div class="text-rose-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="mt-5">
    <button class="bg-teal-500 hover:bg-teal-600 text-white uppercase font-medium text-sm py-1.5 px-3 rounded-lg transition-all duration-150">Save</button>
</div>
