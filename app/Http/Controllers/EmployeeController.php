<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Proteksi semua metode dengan middleware auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan daftar karyawan dengan pagination terbaru
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('employees.index', compact('employees'));
    }

    // Form tambah karyawan
    public function create()
    {
        return view('employees.create');
    }

    // Simpan data karyawan baru
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:20|unique:employees,nim',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    // Detail satu karyawan
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // Form edit karyawan
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update data karyawan
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nim' => 'required|string|max:20|unique:employees,nim,' . $employee->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email,' . $employee->id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil diperbarui.');
    }

    // Hapus karyawan
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil dihapus.');
    }
}
