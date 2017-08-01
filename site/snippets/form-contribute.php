<section class="hero is-primary" id="contribute">
    <div class="hero-body columns">
      <div class="column is-6 is-offset-3">

        <div class="columns">

          <div class="column is-7">
            <form id="at_form" class="box" @submit.prevent="save">
              <div class="field">
                <label class="label">Name</label>
                <p class="control">
                  <input class="input" type="text" placeholder="Name" v-model="name">
                </p>
              </div>

              <div class="field">
                <label class="label">Email</label>
                <p class="control">
                  <input class="input is-primary" type="text" placeholder="<?php echo l::get('f_email_hint') ?>" v-model="email">
                </p>
                <p class="help"><?php echo l::get('f_mandatory') ?></p>
              </div>

              <div class="field">
                <label class="label"><?php echo l::get('f_donations') ?></label>
                <p class="control">
                  <span class="select">
                    <select v-model="type">
                      <option value="laptops"     ><?php echo l::get('f_laptop') ?></option>
                      <option value="flatscreentv"><?php echo l::get('f_monitor') ?></option>
                      <option value="sports"      ><?php echo l::get('f_sport') ?></option>
                      <option value="clothes"     ><?php echo l::get('f_clothes') ?></option>
                      <option value="toys"        ><?php echo l::get('f_toys') ?></option>
                      <option value="strollers"   ><?php echo l::get('f_buggy') ?></option>
                      <option value="sofas"       ><?php echo l::get('f_sofa') ?></option>
                      <option value="bikes"       ><?php echo l::get('f_bike') ?></option>
                      <option value="carparts"    ><?php echo l::get('f_carparts') ?></option>
                      <option value="misc"        ><?php echo l::get('f_misc') ?></option>
                    </select>
                  </span>
                </p>
              </div>

              <div class="field">
                <label class="label"><?php echo l::get('f_message') ?></label>
                <p class="control">
                  <textarea class="textarea is-primary" placeholder="<?php echo l::get('f_message_hint') ?>" v-model="message"></textarea>
                </p>
                <p class="help"><?php echo l::get('f_mandatory') ?></p>
              </div>

              <div class="field">
                <label class="label"><?php echo l::get('f_photo') ?></label>
                <!--p class="control">
                <input class="" name="datei" type="file" size="50" accept="image/*">
              </p-->
              <p class="help"><?php echo l::get('f_photo_help') ?></p>
              <p class="control">
                <input type="file" size="200" accept="image/*" capture="camera" ref="photo">
              </p>
            </div>

            <div class="field">
              <p class="control">
                <button class="button is-warning" v-text="submitText"></button>
              </p>
            </div>
          </form>

          <script>
            var at_form = new Vue({
              el: '#at_form',
              data: {
                name: '',
                email: '',
                type: '',
                message: '',
                submitText: <?php echo "'" . l::get('submit') . "'" ?>
              },
              methods: {
                save: function() {
                  var itemsRef = firebase.database().ref('items');
                  var storageRef = firebase.storage().ref();
                  var photo;

                  var item = {
                    name: this.name,
                    email: this.email,
                    type: this.type,
                    message: this.message
                  }

                  var pushedItem = itemsRef.push(item);

                  if (this.$refs.photo.files.length > 0) {
                    photo = this.$refs.photo.files[0];
                    storageRef.child('photos/' + pushedItem.key + '.' + photo.name).put(photo);
                  }

                  this.name = '';
                  this.email = '';
                  this.type = '';
                  this.message = '';
                  this.submitText = 'Vielen Dank!';
                }
              }
            });
          </script>
        </div>

        <div class="column is-5">
          <aside class="content hero is-primary">
            <?php echo l::get('f_text') ?>
          </aside>
        </div>

      </div>
    </div>
  </div>
</section>
