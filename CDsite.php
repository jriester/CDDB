<!DOCTYPE html>
<html lang="eng">

<body>
    <h2>CD Database</h2>

    <div id="myForm">
        <form id="myform" name="theForm" class="group" action="CDDB.php" method="POST">
            <legend>CD Insertion</legend>
            <ul>
                <li>
                    <label for="NCD">
                        <span id="rqd">*</span>Name of Album</label>
                    <input type="text" name="album" class="tb" id="albumTitle" placeholder="Name of Album" > </input>
					
				</li>
                </p>
                <li>
                    <label for="ICD">
                        <span id="rqd">*</span>Artist ID</label>
                    <input type="text" name="artistid" class="tb" id="ICD" placeholder="Artist ID" > </input>
                </li>
                </p>
                <li>
                    <label for="AICD">
                        <span id="rqd">*</span>Album ID</label>
                            <input type="text" name="albumID" class="tb" id="AICD" placeholder="Album ID" />
                </li>
                </p>
                <li>
                    <label for="GCD">
                        <span id="rqd">*</span>Album Genre </label>
                    <input type="text" name="genre" class="tb" id="GCD" placeholder="Album Genre" />
                </li>
                </p>
                <li>
                    <label for="RDCD">
                        <span id="rqd">*</span>Album Release Date</label>
                    <input type="text" name="release" class="tb" id="RDCD" placeholder="CD Release Date" />
                </li>
                </p>
                <li>
                    <label for="TCD">
                        <span id="rqd">*</span>Enter Tracks Seperated by a Comma</label>
                    <input type="text" name="trackList" class="tb" id="TCD" placeholder="Track List" />
                </li>
                </p>
                
                </p>
                <li>
                    <input type="submit" value="Add Album" />
                </li>
                </p>
                <li>
                    <span id="rqd">*</span>Indicates Required</li>
            </ul>
        </form>
    </div>

</body>

</html>