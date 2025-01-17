@extends('layouts.admin')
@section('title', 'Quản lý đánh giá')

@section('content')
    <h1>Danh sách đánh giá</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã hóa đơn</th>
                <th>Khách hàng</th>
                <th>Mã Sách</th>
                <th>thời gian đánh giá</th>
                <th>Nội dung</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($danhgias as $danhgia)
                <tr>
                    <td>{{ $danhgia->MaDanhGia }}</td>
                    <td>{{ $danhgia->MaHoaDon }}</td>
                    <td>{{ $danhgia->MaKhachHang }}</td>
                    <td>{{ $danhgia->MaSach }}</td>
                    <td>{{ $danhgia->NgayDanhGia }}</td>
                    <td>{{ $danhgia->NoiDung }}</td>
                    <td>
                    <form action="{{ route('admin.danhgia.destroy', $danhgia->MaDanhGia) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
