<div class="table-responsive">
    <table class="table" id="membershiptypes-table">
        <thead>
            <tr>
                <th>Courthourlyfee</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($membershiptypes as $membershiptype)
            <tr>
                <td>{{ $membershiptype->courthourlyfee }}</td>
                <td>
                    {!! Form::open(['route' => ['membershiptypes.destroy', $membershiptype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('membershiptypes.show', [$membershiptype->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('membershiptypes.edit', [$membershiptype->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
