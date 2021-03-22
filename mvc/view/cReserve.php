
    <div class="container">
        <h3>예약하기</h3>
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="/reserve/creserve">수동 예약</a></li>
            <li><a href="/reserve/areserve">자동 예약</a></li>
        </ul>
        <div class="panel"></div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <p>
                        예약된 방 : <spaa class="label label-primary"> 방 번호 </spaa> 
                        <span class="pull-right">* 각 층별로 홀수실은 육지, 짝수실은 바다를 바라보고 있습니다.</span>
                    </p>
                    </div>
                    <div class="col-lg-4">
                        <form class="form-horizontal creserve-form" method="post" action="/reserve/resroom">
                            <div class="input-group">
                                <span class="input-group-addon">입실</span>
                                <input type="date" class="form-control date in_date" value="2017-06-25" name="in_date">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">퇴실</span>
                                <input type="date" class="form-control date out_date" value="2017-06-30" name="out_date">
                            </div>
                            <label for="number">방번호 선택</label>
                            <select multiple class="form-control" id="number" name="room[]">
                                <option>101</option>
                                <option>102</option>
                                <option>103</option>
                                <option>104</option>
                                <option>106</option>
                                <option>108</option>
                                <option>113</option>
                                <option>115</option>
                                <option>116</option>
                                <option>117</option>
                                <option>119</option>
                                <option>201</option>
                                <option>202</option>
                                <option>203</option>
                                <option>204</option>
                                <option>206</option>
                                <option>208</option>
                                <option>213</option>
                                <option>215</option>
                                <option>216</option>
                                <option>217</option>
                                <option>219</option>
                                <option>301</option>
                                <option>302</option>
                                <option>303</option>
                                <option>304</option>
                                <option>306</option>
                                <option>308</option>
                                <option>313</option>
                                <option>315</option>
                                <option>316</option>
                                <option>317</option>
                                <option>319</option>
                                <option>401</option>
                                <option>402</option>
                                <option>403</option>
                                <option>404</option>
                                <option>406</option>
                                <option>408</option>
                                <option>413</option>
                                <option>415</option>
                                <option>416</option>
                                <option>417</option>
                                <option>419</option>
                                <option>501</option>
                                <option>502</option>
                                <option>503</option>
                                <option>504</option>
                                <option>506</option>
                                <option>508</option>
                                <option>513</option>
                                <option>515</option>
                                <option>516</option>
                                <option>517</option>
                                <option>519</option>
                            </select>
                            <input type="submit" class="btn btn-success btn-block" value="예약하기">
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <td>101</td>
                                <td>103</td>
                                <td class="bg-primary">105</td>
                                <td class="bg-primary">107</td>
                                <td class="bg-primary">109</td>
                                <td class="bg-primary">111</td>
                                <td>113</td>
                                <td>115</td>
                                <td>117</td>
                                <td>119</td>
                            </tr>
                            <tr>
                                <td colspan="10">1층</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>104</td>
                                <td>106</td>
                                <td>108</td>
                                <td class="bg-primary">110</td>
                                <td class="bg-primary">112</td>
                                <td class="bg-primary">114</td>
                                <td>116</td>
                                <td class="bg-primary">118</td>
                                <td class="bg-primary">120</td>
                            </tr>
                        </table><br>
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <td>201</td>
                                <td>203</td>
                                <td class="bg-primary">205</td>
                                <td class="bg-primary">207</td>
                                <td class="bg-primary">209</td>
                                <td class="bg-primary">211</td>
                                <td>213</td>
                                <td>215</td>
                                <td>217</td>
                                <td>219</td>
                            </tr>
                            <tr>
                                <td colspan="10">2층</td>
                            </tr>
                            <tr>
                                <td>202</td>
                                <td>204</td>
                                <td>206</td>
                                <td>208</td>
                                <td class="bg-primary">210</td>
                                <td class="bg-primary">212</td>
                                <td class="bg-primary">214</td>
                                <td>216</td>
                                <td class="bg-primary">218</td>
                                <td class="bg-primary">220</td>
                            </tr>
                        </table><br>
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <td>301</td>
                                <td>303</td>
                                <td class="bg-primary">305</td>
                                <td class="bg-primary">307</td>
                                <td class="bg-primary">309</td>
                                <td class="bg-primary">311</td>
                                <td>313</td>
                                <td>315</td>
                                <td>317</td>
                                <td>319</td>
                            </tr>
                            <tr>
                                <td colspan="10">3층</td>
                            </tr>
                            <tr>
                                <td>302</td>
                                <td>304</td>
                                <td>306</td>
                                <td>308</td>
                                <td class="bg-primary">310</td>
                                <td class="bg-primary">312</td>
                                <td class="bg-primary">314</td>
                                <td>316</td>
                                <td class="bg-primary">318</td>
                                <td class="bg-primary">320</td>
                            </tr>
                        </table><br>
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <td>401</td>
                                <td>403</td>
                                <td class="bg-primary">405</td>
                                <td class="bg-primary">407</td>
                                <td class="bg-primary">409</td>
                                <td class="bg-primary">411</td>
                                <td>413</td>
                                <td>415</td>
                                <td>417</td>
                                <td>419</td>
                            </tr>
                            <tr>
                                <td colspan="10">4층</td>
                            </tr>
                            <tr>
                                <td>402</td>
                                <td>404</td>
                                <td>406</td>
                                <td>408</td>
                                <td class="bg-primary">410</td>
                                <td class="bg-primary">412</td>
                                <td class="bg-primary">414</td>
                                <td>416</td>
                                <td class="bg-primary">418</td>
                                <td class="bg-primary">420</td>
                            </tr>
                        </table><br>
                        <table class="table table-bordered hotel-view">
                            <tr>
                                <td>501</td>
                                <td>503</td>
                                <td class="bg-primary">505</td>
                                <td class="bg-primary">507</td>
                                <td class="bg-primary">509</td>
                                <td class="bg-primary">511</td>
                                <td>513</td>
                                <td>515</td>
                                <td>517</td>
                                <td>519</td>
                            </tr>
                            <tr>
                                <td colspan="10">5층</td>
                            </tr>
                            <tr>
                                <td>502</td>
                                <td>504</td>
                                <td>506</td>
                                <td>508</td>
                                <td class="bg-primary">510</td>
                                <td class="bg-primary">512</td>
                                <td class="bg-primary">514</td>
                                <td>516</td>
                                <td class="bg-primary">518</td>
                                <td class="bg-primary">520</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <script src="/js/reserve.js"></script>
</body>
</html>