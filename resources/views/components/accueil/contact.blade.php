<div class="bg-orange-light mt-5 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-8 card p-5 rounded-0 border-0 shadow">
                <h3 class="mb-4">GARDEZ LE CONTACT</h3>
                <form action="contact" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email *"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nom *"
                                    required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="3"
                                    placeholder="Message *" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-red px-5">ENVOYER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>