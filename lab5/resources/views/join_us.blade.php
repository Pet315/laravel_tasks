<html>
    <body>
        <div>
            <form method="post" action="./congrats">
                @csrf
                <div>
                    <h2>Create your nickname</h2>
                    <input style="font-size: 16px;" name="nickname">
                </div>
                <br><button type="submit" style="height:40px; width:90px; border-radius: 30%">Submit</button>
            </form>
        </div>
    </body>
</html>

