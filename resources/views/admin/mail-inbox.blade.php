@extends('/layouts/masters2')
@section('contenu')

<section class="content email-page">
    <div class="container-fluid">
        <div class="row">                 
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#primary">Primary</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social">Social</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#updates">Updates</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active in" id="primary">
                        <section class="mail_listing body table-responsive">
                            <table class="table table-hover">                                
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);"><span class="label label-info">Work</span>Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_4" />
                                                <label for="basic_checkbox_4"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_5" />
                                                <label for="basic_checkbox_5"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Akshay Kumar</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_55" />
                                                <label for="basic_checkbox_55"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar5.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_44" />
                                                <label for="basic_checkbox_44"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_23" />
                                                <label for="basic_checkbox_23"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Akshay Kumar</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_13" />
                                                <label for="basic_checkbox_13"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 10 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_32" />
                                                <label for="basic_checkbox_32"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar5.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 10 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_37" />
                                                <label for="basic_checkbox_37"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 10 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_38" />
                                                <label for="basic_checkbox_38"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Akshay Kumar</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="assets/images/xs/avatar5.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="social">
                        <section class="mail_listing body table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);"><span class="label label-info">Work</span>Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>                                           
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_44" />
                                                <label for="basic_checkbox_44"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar5.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="updates">
                        <section class="mail_listing body table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);"><span class="label label-info">Work</span>Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>                                           
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_44" />
                                                <label for="basic_checkbox_44"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar1.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar5.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar2.jpg" alt="profile img">Ritesh Deshmukh</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-success">Themeforest</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar4.jpg" alt="profile img">Hritik Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down"><img src="assets/images/xs/avatar3.jpg" alt="profile img">Genelia Roshan</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>        
            <div class="col-sm-6">
                <p class="m-t-15">Showing 1 - 15 of 200</p>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-arrow-left"></i></button>
                <button type="button" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>
@endsection